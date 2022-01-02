#include<bits/stdc++.h>
#define ll long long
using namespace std;

int main()
{
    freopen("Repetitions.inp","r",stdin);
    freopen("Repetitions.out","w",stdout);
    string st;
    cin >> st;
    int n = st.size(), ans = 0, cnt = 0;
    for (int i=1; i<n; i++) {
        if (st[i]==st[i-1]) {
            cnt++;
            ans = max(ans,cnt);
        }
        else cnt=1;
    }
    cout << max(ans,cnt);
    return 0;
}
