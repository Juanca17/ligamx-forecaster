def remove_emoji(data):
    data = data.replace("👊", "")
    data = data.replace("⚾️", "")
    data = data.replace("😮", "")
    data = data.replace("👇", "")
    return data
